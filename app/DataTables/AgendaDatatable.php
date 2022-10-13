<?php

namespace App\DataTables;

use App\Models\Agenda;
use Illuminate\Support\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AgendaDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('tanggal', function(Agenda $model) {
                $formatedDate = Carbon::createFromFormat('Y-m-d', $model->tanggal)->format('d-m-Y');
                return $formatedDate;
            })
            ->editColumn('status', function(Agenda $model) {
                if ($model->status == 1) {
                    return '<span class="badge badge-pill badge-success">Aktif</span>';
                } else {
                    return '<span class="badge badge-pill badge-danger">Tidak Aktif</span>';
                }
            })
            ->addColumn('action', fn (Agenda $model) => view('partials.datatables-action',[
                'model' => $model,
                'editUrl' => route('agenda.edit', $model->id),
                'deleteUrl' => route('agenda.destroy', $model->id),
                'modelName' => $model->nama,
                'modelText' => 'Agenda'
            ]))
            ->rawColumns([
                'status',
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Agenda $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Agenda $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('agendadatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->autoWidth()
                    ->dom('frtip')
                    ->orderBy(2, 'desc')
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('nama'),
            Column::make('tanggal'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(200)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Agenda_' . date('YmdHis');
    }
}

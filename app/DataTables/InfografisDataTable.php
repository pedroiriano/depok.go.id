<?php

namespace App\DataTables;

use App\Models\Infografis;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class InfografisDataTable extends DataTable
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
            ->editColumn('status', function(Infografis $model){
                if ($model->status == 1) {
                    return '<span class="badge badge-pill badge-success">Aktif</span>';
                } else {
                    return '<span class="badge badge-pill badge-danger">Tidak Aktif</span>';
                }
            })
            ->addColumn('action', fn (Infografis $model) => view('partials.datatables-action', [
                'model' => $model,
                'editUrl' =>  route('slider.edit', $model->id),
                'deleteUrl' =>  route('slider.destroy', $model->id),
                'modelName' =>  $model->nama,
                'modelText' => 'Pengumuman',
            ]))
            ->rawColumns([
                'status'
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\InfografisDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Infografis $model)
    {
        return $model->newQuery()
            ->with('opd');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('infografisdatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('frtip')
                    ->orderBy(1)
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
            Column::make('id')
                ->title('#')
                ->width(30),
            Column::make('nama'),
            Column::make('opd.nama')
                ->title('OPD')
                ->orderable(false),
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
        return 'Infografis_' . date('YmdHis');
    }
}

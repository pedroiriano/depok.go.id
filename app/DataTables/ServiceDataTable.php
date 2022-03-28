<?php

namespace App\DataTables;

use App\Service;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ServiceDataTable extends DataTable
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
            ->editColumn('statusservice', function(Service $model){
                $status = $model->statusservice == 1 ? 'Aktif' : 'Tidak Aktif';
                return $status;
            })
            ->addColumn('action', fn (Service $model) => view('vendor.datatables.datatables-action', [
                'model' => $model,
                'editUrl' =>  route('admin-service.edit', $model->id),
                'deleteUrl' =>  route('admin-service.destroy', $model->id),
                'modelName' =>  $model->name,
                'modelText' => 'Layanan',
            ]));
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Service $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Service $model)
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
                    ->setTableId('service-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('export'),
                        Button::make('print'),
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
                ->width(30)
                ->addClass('text-nowarp'),
            Column::make('namaservice')->title('Nama'),
            Column::make('statusservice')->title('Status'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
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
        return 'Service_' . date('YmdHis');
    }
}

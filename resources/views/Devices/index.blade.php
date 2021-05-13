@extends('layouts.plantilla')

@section('css')

@endsection

@section('content')

    <section class="testimonials section-bg ">
        <div class="container p-5">

            <div class="section-title">
                <h2>Dispositivos</h2>
                <p>Estos son los dispositivos asignados a tu nombre:</p>
                <a href="{{ route('devices.create') }}" class="btn btn-success mt-3">Añadir</a>
                <table id="devices" class="table my-5">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tipo de dispositivo</th>
                            <th scope="col">Serial</th>
                            <th scope="col">Ubicacioón</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Fehca asignación</th>
                            <th scope="col">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($devices as $device)
                            <tr>
                                <th scope="row">{{ $device->id }}</th>
                                <td>{{ $device->deviceType->description }}</td>
                                <td>{{ $device->serial }}</td>
                                <td>{{ $device->location }}</td>
                                <td>
                                    @if ($device->state == 1)
                                        Activo
                                    @else
                                        Inactivo
                                    @endif
                                </td>
                                <td>{{ $device->created_at }}</td>
                                <td>
                                    <div>
                                        <a href="{{ route('devices.edit', $device->id) }}" class="btn btn-primary">Editar</a>
                                        <a href="{{ route('consumptions.show', $device->id) }}" class="btn btn-warning">Consumos</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection

@section('js')

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <script>
        $('#devices').DataTable({
            responsive: true,
            autoWidth: false,

            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No hay nada para mostrar - disculpa",
                "info": "Mostrando _PAGE_ de _PAGES_",
                "infoEmpty": "No existen registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "buscar",
                "paginate": {
                    'next': "Siguiente",
                    'previous': "Anterior"
                }
            }
        });

    </script>

    @if (session('created') == 'ok')
        <script>
            Swal.fire({
                icon: 'success',
                position: 'center',
                icon: 'success',
                title: 'El elemento se ha creado de manera correcta',
                showConfirmButton: false,
                timer: 3000
            })

        </script>
    @endif

    @if (session('edited') == 'ok')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'El dispositivo ha sido editado de manera correcta',
                showConfirmButton: false,
                timer: 2000
            })

        </script>
    @endif

@endsection

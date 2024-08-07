<div class="container mx-auto">
  <h1 class="text-2xl font-bold mb-4">Lista de Tareas</h1>
  @isset($tareas)
  <table class="table-auto w-full">
    <thead>
      <tr>
        <th>Tarea</th>
        <th>Descripción</th>
        <th>Estado</th>
        <th>Fecha de Creación</th>
        <th>Fecha de Inicio</th>
        <th>Fecha de Término</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tareas as $tarea)
      <tr>
        <td>{{ $tarea->tarea }}</td>
        <td>{{ $tarea->descripcion }}</td>
        <td>{{ $tarea->estado }}</td>
        <td>{{ $tarea->fecha_creacion->format('d/m/Y') }}</td>
        <td>{{ $tarea->fecha_inicio ? $tarea->fecha_inicio->format('d/m/Y') : '-' }}</td>
        <td>{{ $tarea->fecha_termino ? $tarea->fecha_termino->format('d/m/Y') : '-' }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endisset
</div>
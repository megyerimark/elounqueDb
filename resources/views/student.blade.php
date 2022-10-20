<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Név</th>
        <th>Email</th>
        <th>Telefon</th>
        <th>Kurzus</th>
        <th>Ár</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $students as $student )
         <tr>
           <td>{{ $student->id }}</td>
           <td>{{ $student->name }}</td>
           <td>{{ $student->email }}</td>
           <td>{{ $student->phone }}</td>
           <td>{{ $student->course->course }}</td>
           <td>{{ $student->course->price }}</td>
         </tr>
      @endforeach
    </tbody>
  </table>
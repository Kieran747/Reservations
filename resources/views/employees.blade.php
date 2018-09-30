@extends('layouts.navbar')


    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>

            <td>Name</td>
            <td>Email</td>
            <td>test</td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td><a href=""><button>Test</button></a></td>
        </tr>
        @endforeach
    </table>

@extends('layouts.footer')


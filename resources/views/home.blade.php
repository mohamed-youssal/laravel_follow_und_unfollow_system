@section('title')
    Home page
@endsection

@section('content')
    <div class="row">
        <div class="col col-10 mx-auto">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">follow</th>
                    <th scope="col">email</th>
                    <th scope="col">operations</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td class="row">
                                following : {{$user->followings()->count()}} /
                                followers : {{$user->followers()->count()}}
                            </td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if (Auth::user()->id !== $user->id)
                                    @if ($user->followers->contains(Auth::user()->id))
                                        <a href="{{route('unfollow', $user->id)}}" class="btn btn-sm btn-danger">unfollow</a>
                                    @else
                                        <a href="{{route('follow', $user->id)}}" class="btn btn-sm btn-primary">follow</a>
                                    @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>   
        </div>
        <div class="col-lg-3 mx-auto">
            {{$users->links()}}
        </div>
    </div>
@endsection

@extends('layouts.master')
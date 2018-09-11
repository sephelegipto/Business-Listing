@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Latest Business Listings <span class="pull-right"><a href="/dashboard" class="btn btn-success btn-xs">My Listing</a></span></div>

            <div class="card-body">

                @if(count($listings))
                <ul class="list-group">
                    @foreach($listings as $listing)
                    <li class="list-group-item"><a href="/listing/{{$listing->id}}">{{$listing->name}}</a></li>
                    @endforeach @else

                </ul>
                <p>No Listings Found</p>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

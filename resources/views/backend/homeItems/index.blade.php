@extends('backend.app')


@section('content')
    <div class="content-body">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="row match-height">
                    @foreach($items as $item)
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ '/storage/'.$item->image }}" class="w-100 h-100" alt="">
                                <div class="card-body">
                                    <h2>{{ $item->title }}</h2>
                                    <a href="{{ route('admin.homeitems.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit Item</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


@extends('admin.app')

@section('content')

    <div class="x_panel">
        <div class="x_title">
            <h2>Edytuj mieszkanie</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form action="{{ route('admin.apartment.update', ['apartment'=>$apartment->id]) }}" method="post" class="form-horizontal" enctype="multipart/form-data">

                @csrf
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="title">Nazwa <span class="required">*</span></label>
                        <input type="text" name="name" id="title" class="form-control" value="{{ old('name', $apartment->name ?? '') }}">

                        @if($errors->has('name'))
                            <p class="alert alert-danger"> {{ $errors->first('name') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group col-md-5">
                        <label for="description">Opis <span class="required">*</span></label>
                        <textarea name="description" id="description" class="form-control">{{ old('description', $apartment->description ?? '') }}</textarea>
                        @if($errors->has('description'))
                            <p class="alert alert-danger"> {{ $errors->first('description') }}
                            </p>
                        @endif
                    </div>

                </div>



                <div class="form-row">

                    <div class="form-group col-md-5">
                        <label for="price">Cena mieszkania <span class="required">*</span></label>
                        <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ old('price', $apartment->price ?? '') }}">

                        @if($errors->has('price'))
                            <p class="alert alert-danger"> {{ $errors->first('price') }}
                            </p>
                        @endif
                    </div>

                    <div class="form-group col-md-5">
                        <label for="price_per_meter">Cena za metr <span class="required">*</span></label>
                        <input type="number" step="0.01" name="price_per_meter" id="price_per_meter" class="form-control"
                               value="{{ old('price_per_meter', $apartment->price_per_meter ?? '') }}">

                        @if($errors->has('price_per_meter'))
                            <p class="alert alert-danger"> {{ $errors->first('price_per_meter') }}
                            </p>
                        @endif
                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group col-md-5">
                        <label for="dimension">Wielkość w m2 <span class="required">*</span></label>
                        <input type="number" step="0.01" name="dimension" id="dimension" class="form-control" value="{{ old('dimension', $apartment->dimension ?? '') }}">

                        @if($errors->has('dimension'))
                            <p class="alert alert-danger"> {{ $errors->first('dimension') }}
                            </p>
                        @endif
                    </div>

                    <div class="form-group col-md-5">
                        <label for="rooms">Liczba pokoi <span class="required">*</span></label>
                        <input type="number" step="1" name="rooms" id="rooms" class="form-control"
                               value="{{ old('rooms', $apartment->rooms ?? '') }}">

                        @if($errors->has('rooms'))
                            <p class="alert alert-danger"> {{ $errors->first('rooms') }}
                            </p>
                        @endif
                    </div>

                </div>
                <div class="form-row">

                    <div class="form-group col-md-5">
                        <label for="level">Piętro <span class="required">*</span></label>
                        <input type="number" step="1" name="level" id="level" class="form-control" value="{{ old('level', $apartment->level ?? '') }}">

                        @if($errors->has('level'))
                            <p class="alert alert-danger"> {{ $errors->first('level') }}
                            </p>
                        @endif
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="pdf">PDF</label>
                        <input type="file" class="form-control-file" name="pdf" id="pdf">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="submit" class="btn btn-success">Edytuj</button>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <a href="{{ route('admin.apartment.index') }}" class="btn btn-primary">Anuluj</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
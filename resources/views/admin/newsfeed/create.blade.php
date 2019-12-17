@extends('admin.app')

@section('content')

    <div class="x_panel">
        <div class="x_title">
            <h2>Dodaj news</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form action="{{ route('admin.newsfeed.store') }}" method="post" type="" class="form-horizontal" enctype="multipart/form-data">

                @csrf
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="title">Tytuł <span class="required">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $newsfeed->title ?? '') }}">

                        @if($errors->has('title'))
                            <p class="alert alert-danger"> {{ $errors->first('title') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group col-md-5">
                        <label for="content">Treść <span class="required">*</span></label>
                        <textarea name="content" id="content" class="form-control">{{ old('content', $newsfeed->content ?? '') }}</textarea>
                        @if($errors->has('content'))
                            <p class="alert alert-danger"> {{ $errors->first('content') }}
                            </p>
                        @endif
                    </div>


                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="publication_date">Data publikacji <span class="required">*</span></label>
                        <input type="datetime-local" name="publication_date" id="publication_date" class="form-control"
                               value="{{ old('publication_date', $newsfeed->publication_date ?? '') }}">

                        @if($errors->has('publication_date'))
                            <p class="alert alert-danger"> {{ $errors->first('publication_date') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group col-md-5">
                        <label for="publication_date_stop">Data końca publikacji <span class="required">*</span></label>
                        <input type="datetime-local" name="publication_date_stop" id="publication_date_stop" class="form-control"
                               value="{{ old('publication_date_stop', $newsfeed->publication_date_stop ?? '') }}">

                        @if($errors->has('publication_date_stop'))
                            <p class="alert alert-danger"> {{ $errors->first('publication_date_stop') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="photo">Zdjęcie</label>
                        <input type="file" class="form-control-file" name="photo" id="photo">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="submit" class="btn btn-success">Dodaj news</button>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <a href="{{ route('admin.newsfeed.index') }}" class="btn btn-primary">Anuluj</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
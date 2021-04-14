<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror 
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del slug', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiqueta:</p>

    @foreach ($tags as $tag)
    
        <label class="mr-5">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>

    @endforeach

    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div> 

<div class="form-group">
    <p class="font-weight-bold">Estado:</p>

    <label class="mr-5">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="row sm-1 mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
            <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
            <img id="picture" src="https://cdn.pixabay.com/photo/2020/10/18/18/42/bulb-5665770_960_720.jpg" alt="">
            @endisset
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accepted' => 'image/*']) !!}

            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>                        

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas ex nibh, vitae accumsan lacus vulputate id. Curabitur volutpat laoreet aliquam. Praesent et gravida lorem, vitae vehicula nisl. Aliquam orci tellus, dictum in mi nec, tempor tristique velit. Mauris quis justo urna. Suspendisse et laoreet sem. Vivamus tincidunt orci sit amet tincidunt tempor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ut nisl eget neque ornare placerat.</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Estracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
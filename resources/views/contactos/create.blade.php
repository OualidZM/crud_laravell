@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Contacts') }}
    </h2>
@endsection

@section('content')

    <div class="">

        <h2 class="tableTitle">{{ __('Añadir Nuevo Contacto') }}</h2>

        {{-- <p>{{Auth::user()->user_role}}</p> --}}
        <a href="{{ url('dashboard') }}"><button class="btn-header back-style">{{ __('Atras') }}</button></a>
    </div>

    <ul>
        @foreach ($errors->all() as $error)
            <li >{{ $error }}</li>
        @endforeach
    </ul>
        <form action="{{ url('dashboard') }}" method="POST" class="formWrapper">
            @csrf
                <label for="name">@lang('Name')</label>
                <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                    @error('name')
                        <div class="error-bg">{{ $message }}</div>
                    @enderror
                    <label for="age">@lang('Edat')</label>

                <input type="number" name="age" id="age" placeholder="Age" value="{{ old('age') }}">
                    @error('age')
                        <div class="error-bg">{{ $message }}</div>
                    @enderror

                    <label for="date">@lang('Fecha de Nacimiento')</label>

                <input type="date" name="bornDate" id="date" value="{{ old('bornDate') }}">
                    @error('bornDate')
                        <div class="error-bg">{{ $message }}</div>
                    @enderror
                    <label for="descripcion">@lang('Descripcion')</label>

                <textarea name="description" id="descripcion" cols="20" rows="10">{{ old('description')}}</textarea>
                    @error('description')
                        <div class="error-bg">{{ $message }}</div>
                    @enderror
                    
                    <label for="descripcion">@lang('Genero')</label>
                <div  style="display:flex; justify-content:space-around; width:15vw;">
                    <label for="radio">{{ __('hombre') }}<input type="radio" value="hombre" name="gender" id="" {{ old('gender') == "hombre" ? 'checked='.'checked' : '' }}></label>
                    <label for="radio">{{ __('mujer') }}<input type="radio" value="mujer" name="gender" id="" {{ old('gender') == "mujer" ? 'checked='.'checked' : '' }}></label>
                </div>
                    @error('gender')
                        <div class="error-bg">{{ $message }}</div>
                    @enderror
                
                    <label for="descripcion">@lang('Color Favorito')</label>

                <select name="select" id="colorss">

                    <option value="verdee" @if (old('select') === 'verdee') selected @endif> @lang('verde')</option>
                    <option value="rojoo" @if (old('select') === 'rojoo') selected @endif> @lang('rojo')</option>
                    <option value="azull" @if (old('select') === 'azull') selected @endif> @lang('azul')</option>
                    <option value="amarilloo" @if (old('select') === 'amarilloo') selected @endif> @lang('amarillo')</option>
                    <option value="marronn" @if (old('select') === 'marronn') selected @endif> @lang('marron')</option>
                    <option value="rosaa" @if (old('select') === 'rosaa') selected @endif> @lang('rosa')</option>
                </select>

                {{-- <option value="pink" @if (old('select') === 'pink') selected @endif>{{ __('verde') }}</option>
                <option value="second" @if (old('select') === 'second') selected @endif>second</option>
                <option value="third" @if (old('select') === 'third') selected @endif>third</option> --}}
                    @error('select')
                        <div class="error-bg">{{ $message }}</div>
                    @enderror


                    <label for="descripcion">@lang('Términos y condiciones')</label>

                <label for="checkbox">{{ __('Aceptar los términos') }}<input type="checkbox" name="agrement" value="1" id="checkbox" @if (old('agrement') === '1') checked @endif></label>
                    @error('agrement')
                        <div class="error-bg">{{ $message }}</div>
                    @enderror
                    <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->id}}">
                <input type="submit" value="Add" class="btn">
        </form>

@endsection
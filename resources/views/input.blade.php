<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
</div>
@props(['titulo', ' type','nomber'])

<div>
    <label> {{$titulo}} </label>
    <input type= {{$type}} name= {{$nombre}}>
    @error($nombre)
    <p> {{$message}}</p>
    @enderror


</div>

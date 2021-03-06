@extends('admin/app')
@section('content')

<!-- componente main de vue (hacemos que todo el codigo main utilice vue) -->
<!-- luego de copiar toda esta plantilla html a los componentes de Vue.extend({
    se debe ejecutar nuevamente nmp run dev para actualizar los cambios
    o en su defecto npm run dev --watch-->

<!--indica que la primera opcion del menu, debe msotrar este componente -->
<transition name="fade" v-if="menu==0">
    <home></home>
</transition>

<transition name="fade" v-if="menu==1">
    <secretaria></secretaria>
</transition>
<transition name="fade" v-if="menu==2">
    <consultorio></consultorio>
</transition>
<transition name="fade" v-if="menu==3">
    <doctor></doctor>
</transition>
<transition name="fade" v-if="menu==4">
    <paciente></paciente>
</transition>

<transition name="fade" v-if="menu==5">
    <perfil :user="{{ Auth::user() }}"></perfil>
</transition>
<transition name="fade" v-if="menu==6">
    <agenda></agenda>
</transition>
{{--

    <template v-if="menu==3">
        <incomes></incomes>
    </template>

    <template v-if="menu==4">
        <providers></providers>
    </template>

    <template v-if="menu==5">
        <sales></sales>
    </template>

    <template v-if="menu==6">
        <clients></clients>
    </template>

    <template v-if="menu==7">
        <users></users>
    </template>

    <template v-if="menu==8">
       <roles></roles>
    </template>

    <template v-if="menu==9">
        <h1>Reporte de ingresos</h1>
    </template>

    <template v-if="menu==10">
        <h1>Reporte de ventas</h1>
    </template>

    <template v-if="menu==11">
        <h1>Ayuda</h1>
    </template>

    <template v-if="menu==12">
        <h1>Acerca de</h1>
    </template> --}}
@endsection

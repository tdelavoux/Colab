@extends('include.layout')

@section('title_page', 'Mes Projets')

@section('content')
<div id="content-page">
    <div class="col-md-12 dashboard-bloc">
        <h4 class="myprojects-title">Mes Projets</h4>
        <div class="dashboard-project-line">
            <span class="dashboard-project-square" style="background-color:#A5ADDC"></span>
            <div class="dashboard-project-group">
                <label class="dashboard-tache-name">Projet 1</label>
                <span class="dashboard-project-bio">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
            </div>
        </div>
        <div class="dashboard-project-line">
            <span class="dashboard-project-square" style="background-color:#D56060"></span>
            <div class="dashboard-project-group">
                <label class="dashboard-tache-name">Projet 2</label>
                <span class="dashboard-project-bio">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
            </div>
        </div>
        <div class="dashboard-project-line">
            <span class="dashboard-project-square" style="background-color:#9CCC9F"></span>
            <div class="dashboard-project-group">
                <label class="dashboard-tache-name">Projet 3</label>
                <span class="dashboard-project-bio">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
            </div>
        </div>
    </div>
</div>
@stop
<div class="col-md-12 dashboard-bloc">
    <h2>Mes Projets</h2>
    
    <div class="row project-card-row">

        @forelse ($projects as $projet)
        <a href="{{route('project.overview', $projet['id']) }}" class="col-md-3 project-card">
            <div class="project-card-liseret" style="background-color:{{ $projet->hexaCode }}"></div>
            <div class="project-card-content">
                <div class="project-card-header">
                    <span style="color:{{ $projet->hexaCode }}">{{ $projet->libelle }}</span>
                </div>
                <div class="project-card-body">
                    {{ $projet->description }}
                </div>
                <div class="project-card-footer">
                    <span><i class="fas fa-chalkboard"></i> 4</span>
                    <span><i class="fas fa-user-friends"></i>3</span>
                    <span><i class="fas fa-tasks"></i>15</span>
                    <span><i class="fas fa-mug-hot"></i><i class="fas fa-infinity"></i></span>
                </div>
            </div>
        </a>
        
        @empty
            <h4>Aucun Projet démarré ! </h4>
        @endforelse
    </div>
</div>
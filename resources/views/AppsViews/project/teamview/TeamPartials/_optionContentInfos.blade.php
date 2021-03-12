@forelse ($teamMembers as $member)
    <div class="col-md-12 team-user-bloc-line">
        <div class="rounded-circle profile-img-sm" style="background-image:url('{{asset('/img/user/' .  $member->userImage )}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        <div class="team-user-infos">
            <span class="team-user-name">{{ $member->userName }}</span>
            <span class="team-user-roles">@foreach($member->roles as $role) {{ $role->name }} , @endforeach </span>
            <a class="btn btn-link team-user-delete" href="{{ route('team.deleteMember', [$member->id]) }}"><i class="fas fa-user-times"></i>Retirer de l'équipe</a>
        </div>
    </div>

    
@empty
    <div class="no-team-bloc">
        <img src="{{ asset('img/team.jpg') }}" width="500px">
        <h5>Cette équipe n'as pas de membres. Ajoutez en !</h5>
    </div>
@endforelse

<button class="btn btn-link" data-toggle="modal" data-target="#AssignModale">+ Ajouter des membres</button>
     
@include('AppsViews.project.teamview.TeamPartials._modalTeamAdding')



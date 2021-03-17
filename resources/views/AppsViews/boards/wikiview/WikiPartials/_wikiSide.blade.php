<div class="wiki-left-bar-option">
    <h3 class="">Chapitres</h3>

    <h5 class="bookmark-project-title">{{ $board->libelle }}</h5>
    <ul id="one" class="wiki-menu-list">
        @foreach($chapters as $chapter)
            <li ><a class="option-menu-list-item-link wiki-menu-list-item-link" href="{{ route('wiki.viewChapter', [$board->id, $chapter->id] ) }}">{{ $chapter->libelle }}</a></li>
        @endforeach
        
        <li class="hidden-add-bookmark"><button class="btn option-menu-list-item-link wiki-menu-list-item-link shadow-none" data-toggle="modal" data-target="#chapterAddModal"><i class="fas fa-bookmark"></i> Nouveau</button></li>

    </ul>

</div>




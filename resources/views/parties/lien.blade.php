<ul>
    <li> <i class="fa fa-folder-open-o"></i>
        <a href="#">{{ $a->domaine->nom}} </a>
    </li>
    <li><a href="#"><i class="fa fa-calendar-o"></i>{{
            $a->created_at->diffForHumans() }}</a></li>
    <li>
        <a href="#"
            onclick="copyToClipboard('{{route('detailBlog',['slug'=>$a->slug])}}')"
            class="">
            <i class="fas fa-link"></i> Copier le lien
        </a>
    </li>
    @if($a->pdf!="" && $a->is_free==true)
    <li><a href="#" name="{{ asset('storage/'.$a->pdf) }}" id="download-pdf"
            class="icon medium"><i class="fas fa-file-pdf"></i> Télécharger le
            PDF</a></li>

    @endif
</ul>
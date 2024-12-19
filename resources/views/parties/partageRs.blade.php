
<div class="social list-style-none float-end mt-10">
    <strong>Partager : </strong>
    <ul>
        <li>
            <a href="#" onclick="facebookShared()" > <i class="fab fa-facebook"></i> </a>
        </li>
        <li>
            <a onclick="xShared({{ json_encode($titre)  }})" data-size="large" data-via="JUREC" data-hashtags="JUREC" data-related="" data-show-count="true"
            style="cursor: pointer;"
            > <i class="fab fa-x"></i> </a>
            {{-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" target="_blank" data-size="large" data-via="JUREC" data-hashtags="JUREC" data-related="" data-show-count="true"
            > <i class="fab fa-x"></i> </a> --}}
        </li>
        {{-- <li>
            <a href="#"> <i class="fab fa-instagram"></i> </a>
        </li> --}}
        <li>
            <a href="#" onclick="whatsappShared({{ json_encode($titre) }})"> <i class="fab fa-whatsapp" ></i> </a>
        </li>
    </ul>
</div>

<!---------------- ZONE DE POST ----------------------------->
<form action="{{ route('chat.postMessage') }}" method="POST"  enctype="multipart/form-data">
    @csrf
    <input name="fkChatRoom" value="{{ $chatRoom['id'] }}" type="hidden">
    <div class="row">
        <div class="chat-express-bloc jumbotron col-md-12">
            <textarea class="form-control limited-area" maxlength="1000" placeholder="Partager une pensée, une question, un document" name="messagePost"></textarea>
            <div id="img-picker-row" class="row"></div>
            <div id="document-picker-row" class="row"></div>
            <div class="icons-line-post">
                <button type="button" class="btn link imagePickerAdd" ><i class="far fa-image image-color"></i></button>
                <button type="button" class="btn link documentAdder"><i class="fas fa-paperclip"></i></button>
                {{-- <button class="btn link"><i class="fas fa-user-tag"></i></button> --}}
            </div>
            <div class="btn-line-right">
                <button type="submit" class="btn btn-primary btn-sm mt-05"><i class="far fa-paper-plane"></i>Partager</button>
            </div>
        </div>
    </div>
</form>
<!---------------- FIN ZONE DE POST ------------------------->
{% for post in postings %}

<div class="col-lg-4 col-sm-4">
    <h1>{{  post.getJudul() }}</h1>
    {{  post.getIsiPost() }}
    <br>by : {{  post.getNamaPoster() }}
    <br><br>
    <h3>comment ({{ post.getView() }}):</h3>
    {% for comment in post.getComments() %}
    {{ comment.getKomentator() }}: {{ comment.getIsiKomen() }}
    <br>
    {% endfor %}
    <br>
    <form method="post" action="/posting/comment">
        <div class="form-group label-floating">
            <label class="control-label">Nama</label>
            <input type="text" name="komentator" class="form-control">
        </div>
        <input type="hidden" name="post_id" value="{{ post.getId() }}">
        <div class="form-group label-floating">
            <label class="control-label">Komentar</label>
            <input type="text" name="isi_komen" class="form-control">

        </div>

        <button class="btn btn-primary" type="submit">Tambahkan Komentar</button>
    </form>
</div>

{% endfor %}
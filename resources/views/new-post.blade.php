<x-layout>
    <x-main-header />

    <div id="main">
        <div class="inner">
            <h1>Nuevo Post</h1>
            <form action="/new/post" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row gtr-uniform">
                    <div class="col-4 col-12-xsmall">
                        <input type="text" name="title" id="title" placeholder="Título" required>
                    </div>
                    <div class="col-4 col-12-xsmall">
                        <select name="category" id="category" required>
                            <option value=""> -Categoría- </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-4 col-12-xsmall">
                        <input type="file" name="image" id="image">
                    </div>
                </div>
                <textarea name="content" id="content" cols="30" rows="10" required>
                </textarea>
                <input type="submit" value="Postear">
            </form>
        </div>
    </div>
</x-layout>

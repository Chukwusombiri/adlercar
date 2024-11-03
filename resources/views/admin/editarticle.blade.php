<x-admin-layout>
  <x-admin-nav></x-admin-nav>
  <x-admin-sidebar></x-admin-sidebar>
    <!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Articles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item"><a href="{{route('admin.articles')}}">Back</a></li>
              
              <li class="breadcrumb-item active">article</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    <div class="row">
    <div class="col">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Modify Article</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
            <!-- form start -->
            <form method="POST" action="{{route('admin.articles.update',[$article->id])}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $article->title}}" required>
    
                            @error('title')
                              <div class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</div>
                            @enderror
                      </div>                 
                 
                  <div class="form-group col-12">
                    <label for="main_content">Description</label>
                    <textarea type="text" class="form-control @error('main_content') is-invalid @enderror" id="main_content" name="main_content" rows="4" required>{{old('main_content') ?? $article->main_content}}</textarea>

                        @error('main_content')
                          <div class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</div>
                        @enderror
                  </div>
                  
                  <div class="form-group col-md-12">
                    <label for="sub_title">Sub-title(optional)</label>
                    <input type="text" class="form-control @error('sub_title') is-invalid @enderror" id="sub_title" name="sub_title" value="{{old('sub_title') ?? $article->sub_title}}">

                        @error('sub_title')
                          <div class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</div>
                        @enderror
                  </div>
                             
                  <div class="form-group col-12">
                    <label for="sub_content">Sub-Description(optional)</label>
                    <textarea type="text" class="form-control @error('sub_content') is-invalid @enderror" id="sub_content" name="sub_content" rows="4">{{old('sub_content') ?? $article->sub_content}}</textarea>

                        @error('sub_content')
                          <div class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</div>
                        @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="author">Author(optional)</label>
                    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{old('author') ?? $article->author}}">

                        @error('author')
                          <div class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</div>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="cover_img">Upload Article image(optional)</label>
                    <input type="file" class="form-control-file @error('cover_img') is-invalid @enderror" id="cover_img" name="cover_img"> 
                    <span>Max: 2MB</span>
                    @error('cover_img')
                          <div class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</div>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="author_img">Upload Author image (optional)</label>
                    <input type="file" class="form-control-file @error('author_img') is-invalid @enderror" id="author_img" name="author_img"> 
                    <span>Max: 2MB</span>
                    @error('author_img')
                          <div class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</div>
                        @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">save</button>
              </form>
          </div>
          <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
      </div>
    </section>
</div>
<x-admin-footer></x-admin-footer>
</x-admin-layout>
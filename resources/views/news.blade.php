@include ('templates/header')
  <main class="main">
    @if(isset($news))
      <div class="main__news news">
        <ul class="news__list">
          @foreach ($news as $article)
            <li class="news__item">
              <a class="news__article article" href="news/{{$loop->index}}">
                <h4 class="article__title">{{$article['title']}}</h4>
                <p class="article__text">{{$article['body']}}</p>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    @else
      <div class="main__article article">
        <h2 class="article__title">{{$article['title']}}</h2>
        <p class="article__text">{{$article['body']}}</p>
        <p class="article__date">{{$article['date']}}</p>
      </div>
    @endif
  </main>
@include ('templates/footer')
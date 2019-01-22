@extends('layouts.app')
@section('title', 'Code')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                
                <div class="card mb-5">
                    <div class="card-header">
                        FIRST AND MOST IMPORTANT
                    </div>
                    <div class="card-body">
                        <li>
                            <a href="https://laracasts.com/series/solid-principles-in-php">SOLID Principle</a>
                        </li>
                        <li>
                            <a href="https://laracasts.com/series/simple-rules-for-simpler-code"> Simple Rules for Simpler Code </a>
                        </li>
                        <li>
                            <a href="https://www.php-fig.org/psr/psr-2/"> PSR 2 Coding style</a>
                        </li>
                        <hr>
                        <li>
                            <a href="https://vuejs.org/v2/style-guide/"> Vue.js style guide</a>
                        </li>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-header">
                        Follow Laravel naming conventions
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>What</th>
                                <th>How</th>
                                <th>Good</th>
                                <th>Bad</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Controller</td>
                                <td>singular</td>
                                <td>ArticleController</td>
                                <td><del>ArticlesController</del></td>
                            </tr>
                            <tr>
                                <td>Route</td>
                                <td>plural</td>
                                <td>articles/1</td>
                                <td><del>article/1</del></td>
                            </tr>
                            <tr>
                                <td>Named route</td>
                                <td>snake_case with dot notation</td>
                                <td>users.show_active</td>
                                <td><del>users.show-active, show-active-users</del></td>
                            </tr>
                            <tr>
                                <td>Model</td>
                                <td>singular</td>
                                <td>User</td>
                                <td><del>Users</del></td>
                            </tr>
                            <tr>
                                <td>hasOne or belongsTo relationship</td>
                                <td>singular</td>
                                <td>articleComment</td>
                                <td><del>articleComments, article_comment</del></td>
                            </tr>
                            <tr>
                                <td>All other relationships</td>
                                <td>plural</td>
                                <td>articleComments</td>
                                <td><del>articleComment, article_comments</del></td>
                            </tr>
                            <tr>
                                <td>Table</td>
                                <td>plural</td>
                                <td>article_comments</td>
                                <td><del>article_comment, articleComments</del></td>
                            </tr>
                            <tr>
                                <td>Pivot table</td>
                                <td>singular model names in alphabetical order</td>
                                <td>article_user</td>
                                <td><del>user_article, articles_users</del></td>
                            </tr>
                            <tr>
                                <td>Table column</td>
                                <td>snake_case without model name</td>
                                <td>meta_title</td>
                                <td><del>MetaTitle; article_meta_title</del></td>
                            </tr>
                            <tr>
                                <td>Model property</td>
                                <td>snake_case</td>
                                <td>$model-&gt;created_at</td>
                                <td><del>$model-&gt;createdAt</del></td>
                            </tr>
                            <tr>
                                <td>Foreign key</td>
                                <td>singular model name with _id suffix</td>
                                <td>article_id</td>
                                <td><del>ArticleId, id_article, articles_id</del></td>
                            </tr>
                            <tr>
                                <td>Primary key</td>
                                <td>-</td>
                                <td>id</td>
                                <td><del>custom_id</del></td>
                            </tr>
                            <tr>
                                <td>Migration</td>
                                <td>-</td>
                                <td>2017_01_01_000000_create_articles_table</td>
                                <td><del>2017_01_01_000000_articles</del></td>
                            </tr>
                            <tr>
                                <td>Method</td>
                                <td>camelCase</td>
                                <td>getAll</td>
                                <td><del>get_all</del></td>
                            </tr>
                            <tr>
                                <td>Method in resource controller</td>
                                <td>table</td>
                                <td>store</td>
                                <td><del>saveArticle</del></td>
                            </tr>
                            <tr>
                                <td>Method in test class</td>
                                <td>camelCase</td>
                                <td>testGuestCannotSeeArticle</td>
                                <td><del>test_guest_cannot_see_article</del></td>
                            </tr>
                            <tr>
                                <td>Variable</td>
                                <td>camelCase</td>
                                <td>$articlesWithAuthor</td>
                                <td><del>$articles_with_author</del></td>
                            </tr>
                            <tr>
                                <td>Collection</td>
                                <td>descriptive, plural</td>
                                <td>$activeUsers = User::active()-&gt;get()</td>
                                <td><del>$active, $data</del></td>
                            </tr>
                            <tr>
                                <td>Object</td>
                                <td>descriptive, singular</td>
                                <td>$activeUser = User::active()-&gt;first()</td>
                                <td><del>$users, $obj</del></td>
                            </tr>
                            <tr>
                                <td>Config and language files index</td>
                                <td>snake_case</td>
                                <td>articles_enabled</td>
                                <td><del>ArticlesEnabled; articles-enabled</del></td>
                            </tr>
                            <tr>
                                <td>View</td>
                                <td>snake_case</td>
                                <td>show_filtered.blade.php</td>
                                <td><del>showFiltered.blade.php, show-filtered.blade.php</del></td>
                            </tr>
                            <tr>
                                <td>Config</td>
                                <td>snake_case</td>
                                <td>google_calendar.php</td>
                                <td><del>googleCalendar.php, google-calendar.php</del></td>
                            </tr>
                            <tr>
                                <td>Contract (interface)</td>
                                <td>adjective or noun</td>
                                <td>Authenticatable</td>
                                <td><del>AuthenticationInterface, IAuthentication</del></td>
                            </tr>
                            <tr>
                                <td>Trait</td>
                                <td>adjective</td>
                                <td>Notifiable</td>
                                <td><del>NotificationTrait</del></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-header">
                        Shorter syntax
                    </div>
                    <div class="card-body">
                        Use shorter and more readable syntax where possible<br>
                        <div class="row">
                            <div class="col-6">
                                <span>BAD</span>
                                <pre class="card card-body">
$request->session()->get('cart');
$request->input('name');
                                </pre>
                            </div>
                            <div class="col-6">
                                <span>GOOD</span>
                                <pre class="card card-body">
session('cart');
request('name');
                                </pre>
                            </div>
                        </div>
                        <b>More examples:</b>
                        <table class="table table-bordered no-code">
                            <thead>
                            <tr>
                                <th>Common syntax</th>
                                <th>Shorter and more readable syntax</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><code>Session::get('cart')</code></td>
                                <td><code>session('cart')</code></td>
                            </tr>
                            <tr>
                                <td><code>$request-&gt;session()-&gt;get('cart')</code></td>
                                <td><code>session('cart')</code></td>
                            </tr>
                            <tr>
                                <td><code>Session::put('cart', $data)</code></td>
                                <td><code>session(['cart' =&gt; $data])</code></td>
                            </tr>
                            <tr>
                                <td><code>$request-&gt;input('name'), Request::get('name')</code></td>
                                <td><code>$request-&gt;name, request('name')</code></td>
                            </tr>
                            <tr>
                                <td><code>return Redirect::back()</code></td>
                                <td><code>return back()</code></td>
                            </tr>
                            <tr>
                                <td><code>is_null($object-&gt;relation) ? null : $object-&gt;relation-&gt;id</code></td>
                                <td><code>optional($object-&gt;relation)-&gt;id</code></td>
                            </tr>
                            <tr>
                                <td><code>return view('index')-&gt;with('title', $title)-&gt;with('client', $client)</code></td>
                                <td><code>return view('index', compact('title', 'client'))</code></td>
                            </tr>
                            <tr>
                                <td><code>$request-&gt;has('value') ? $request-&gt;value : 'default';</code></td>
                                <td><code>$request-&gt;get('value', 'default')</code></td>
                            </tr>
                            <tr>
                                <td><code>Carbon::now(), Carbon::today()</code></td>
                                <td><code>now(), today()</code></td>
                            </tr>
                            <tr>
                                <td><code>App::make('Class')</code></td>
                                <td><code>app('Class')</code></td>
                            </tr>
                            <tr>
                                <td><code>-&gt;where('column', '=', 1)</code></td>
                                <td><code>-&gt;where('column', 1)</code></td>
                            </tr>
                            <tr>
                                <td><code>-&gt;orderBy('created_at', 'desc')</code></td>
                                <td><code>-&gt;latest()</code></td>
                            </tr>
                            <tr>
                                <td><code>-&gt;orderBy('age', 'desc')</code></td>
                                <td><code>-&gt;latest('age')</code></td>
                            </tr>
                            <tr>
                                <td><code>-&gt;orderBy('created_at', 'asc')</code></td>
                                <td><code>-&gt;oldest()</code></td>
                            </tr>
                            <tr>
                                <td><code>-&gt;select('id', 'name')-&gt;get()</code></td>
                                <td><code>-&gt;get(['id', 'name'])</code></td>
                            </tr>
                            <tr>
                                <td><code>-&gt;first()-&gt;name</code></td>
                                <td><code>-&gt;value('name')</code></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-header">
                        Use IoC container or facades instead of new Class
                    </div>
                    <div class="card-body">
                        new Class syntax creates tight coupling between classes and complicates testing. Use IoC container or facades instead.<br>
                        <div class="row">
                            <div class="col-6">
                                <span>BAD</span>
                                <pre class="card card-body">
$user = new User;
$user->create($request->all());
                                </pre>
                            </div>
                            <div class="col-6">
                                <span>GOOD</span>
                                <pre class="card card-body">
public function __construct(User $user)
{
    $this->user = $user;
}
...
$this->user->create($request->all());
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-header">
                        Do not execute queries in Blade templates and use eager loading (N + 1 problem)
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <span>Bad (for 100 users, 101 DB queries will be executed):</span>
                                <pre class="card card-body"><span class="pl-s1"><span class="pl-k">@</span><span class="pl-k">foreach</span> (<span class="pl-c1">User</span><span class="pl-k">::</span>all() <span class="pl-k">as</span> <span class="pl-smi">$user</span>)</span>
<span class="pl-s1">    @{{ <span class="pl-smi">$user</span><span class="pl-k">-&gt;</span><span class="pl-smi">profile</span><span class="pl-k">-&gt;</span><span class="pl-smi">name</span> }}</span>
<span class="pl-s1"><span class="pl-k">@</span><span class="pl-k">endforeach</span></span></pre>
                            </div>
                            <div class="col-6">
                                <span>Good (for 100 users, 2 DB queries will be executed):</span>
                                <pre class="card card-body"><span class="pl-s1"><span class="pl-smi">$users</span> <span class="pl-k">=</span> <span class="pl-c1">User</span><span class="pl-k">::</span>with(<span class="pl-s"><span class="pl-pds">'</span>profile<span class="pl-pds">'</span></span>)<span class="pl-k">-&gt;</span>get();</span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-k">...</span></span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-k">@</span><span class="pl-k">foreach</span> (<span class="pl-smi">$users</span> <span class="pl-k">as</span> <span class="pl-smi">$user</span>)</span>
<span class="pl-s1">    @{{ <span class="pl-smi">$user</span><span class="pl-k">-&gt;</span><span class="pl-smi">profile</span><span class="pl-k">-&gt;</span><span class="pl-smi">name</span> }}</span>
<span class="pl-s1"><span class="pl-k">@</span><span class="pl-k">endforeach</span></span></pre>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mb-5">
                    <div class="card-header">
                        Better naming
                    </div>
                    <div class="card-body">
                        <h2> Use full names for naming classes, variables etc... for faster and better understanding, also for muscle memory.</h2>
                        <div class="row">
                            <div class="col-6">
                                <span>BAD</span>
                                <pre class="card card-body">
                                    <li>class Trnslt</li>
                                    <li>$cols</li>
                                    <li>$notific</li>
                                    <li>$this->postRepo</li>
                                    <li><pre>
class MessagesController extends Controller
{
    public function getMessages(){
        return ... 
    }
}
                                </pre>
                                    </li>
                                </pre>
                            </div>
                            <div class="col-6">
                                <span>GOOD</span>
                                <pre class="card card-body">
                                    <li>class Translate</li>
                                    <li>$columns</li>
                                    <li>$notifications</li>
                                    <li>$this->postRepository</li>
                                    <li><pre>
class MessagesController extends Controller
{
    public function get(){
        return ... 
        [ Note that in getMessages "Messages"
        is redundant because we are inside MessagesController ]
    }
}
                                </pre></li></pre>
                            </div>
                        </div>
                        <hr>
                        <h2>For storing, showing and editing data follow laravel's default method naming</h2>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Verb</th>
                                <th>URI</th>
                                <th>Action</th>
                                <th>Route Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td><code class=" language-php"><span class="token operator">/</span>photos</code></td>
                                <td>index</td>
                                <td>photos.index</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span>create</code></td>
                                <td>create</td>
                                <td>photos.create</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td><code class=" language-php"><span class="token operator">/</span>photos</code></td>
                                <td>store</td>
                                <td>photos.store</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span></code></td>
                                <td>show</td>
                                <td>photos.show</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span><span class="token operator">/</span>edit</code></td>
                                <td>edit</td>
                                <td>photos.edit</td>
                            </tr>
                            <tr>
                                <td>PUT/PATCH</td>
                                <td><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span></code></td>
                                <td>update</td>
                                <td>photos.update</td>
                            </tr>
                            <tr>
                                <td>DELETE</td>
                                <td><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span></code></td>
                                <td>destroy</td>
                                <td>photos.destroy</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-header">
                        Do not put JS and CSS in Blade templates and do not put any HTML in PHP classes
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <span>BAD</span>
                                <pre class="card card-body">
<span class="pl-s1"><span class="pl-c1">let</span> <span class="pl-c1">article</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">`</span>@{{ json_encode(<span class="pl-smi">$article</span>) }}<span class="pl-pds">`</span></span>;</span>
                                </pre>
                            </div>
                            <div class="col-6">
                                <span>GOOD</span>
                                <pre class="card card-body">
<span class="pl-s1"><span class="pl-k">&lt;</span><span class="pl-c1">input</span> <span class="pl-c1">id</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>article<span class="pl-pds">"</span></span> <span class="pl-c1">type</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>hidden<span class="pl-pds">"</span></span> <span class="pl-c1">value</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"@</span>json(<span class="pl-smi">$article</span>)<span class="pl-pds">"</span></span><span class="pl-k">&gt;</span></span>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-header">
                        Mass assignment
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <span>BAD</span>
                                <pre class="card card-body">
$article = new Article;
$article->title = $request->title;
$article->content = $request->content;
$article->verified = $request->verified;
// Add category to article
$article->category_id = $category->id;
$article->save();
                                </pre>
                            </div>
                            <div class="col-6">
                                <span>GOOD</span>
                                <pre class="card card-body">
// Category has a relationship with article in this case
                                    
$category->article()->create($request->all());
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

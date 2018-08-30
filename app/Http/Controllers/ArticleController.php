<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * @SWG\Get(
     *   path="/articles",
     *   summary="List all articles",
     *   operationId="getAllArticles",
     *   @SWG\Parameter(
     *     name="Authorization",
     *     in="header",
     *     description="ID",
     *     required=true,
     *     type="string",
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=401, description="Unauthenticated"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function index()
    {
        return Article::all();
    }

    /**
     * @SWG\Get(
     *   path="/articles/{article}",
     *   summary="get Article",
     *   operationId="getArticleById",
     *   @SWG\Parameter(
     *     name="article",
     *     in="path",
     *     description="Target article.",
     *     required=true,
     *     type="integer"
     *   ),
     *   @SWG\Parameter(
     *     name="Authorization",
     *     in="header",
     *     description="ID",
     *     required=true,
     *     type="string",
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=401, description="Unauthenticated"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function show(Article $article)
    {
        return $article;
    }

    /**
     * @SWG\Post(
     *   path="/articles",
     *   summary="Add New Article",
     *   operationId="postArticle",
     *   @SWG\Parameter(
     *     name="title",
     *     in="formData",
     *     description="Title.",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="body",
     *     in="formData",
     *     description="article Body.",
     *     required=true,
     *     type="string",
     *   ),
     *   @SWG\Parameter(
     *     name="Authorization",
     *     in="header",
     *     description="ID",
     *     required=true,
     *     type="string",
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=401, description="Unauthenticated"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article);
    }

    /**
     * @SWG\Put(
     *   path="/articles/{article}",
     *   summary="update Article",
     *   operationId="putArticle",
     *   @SWG\Parameter(
     *     name="article",
     *     in="path",
     *     description="Target article.",
     *     required=true,
     *     type="integer"
     *   ),
     *   @SWG\Parameter(
     *     name="title",
     *      in="formData",
     *     description="Title.",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="body",
     *     in="formData",
     *     description="article Body",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="Authorization",
     *     in="header",
     *     description="ID",
     *     required=true,
     *     type="string",
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=401, description="Unauthenticated"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article);
    }

    /**
     * @SWG\Delete(
     *   path="/articles/{article}",
     *   summary="Delete Article",
     *   operationId="deleteArticleById",
     *   @SWG\Parameter(
     *     name="article",
     *     in="path",
     *     description="Target article.",
     *     required=true,
     *     type="integer"
     *   ),
     *   @SWG\Parameter(
     *     name="Authorization",
     *     in="header",
     *     description="ID",
     *     required=true,
     *     type="string",
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=401, description="Unauthenticated"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}

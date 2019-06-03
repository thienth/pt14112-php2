<?php 
namespace Controllers;
use Models\Book;
use Models\Category;

class HomeController extends BaseController
{
	
	function index()
	{
		$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : null;
		$cate_id = isset($_GET['cate_id']) == true ? $_GET['cate_id'] : null;
		$query = Book::where('name', 'like', "%$keyword%");
		if($cate_id != null){
			$query->where('cate_id', $cate_id);
		}

		$books = $query->get();

		$cates = Category::all();
						
		return $this->render('homepage', [	
											'keyword' => $keyword,
											'cate_id' => $cate_id,
											'books' => $books,
											'cates' => $cates
										]);
	}

	function detail($id)
	{
		$book = Book::find($id);
		return $this->render('book.detail', ['book' => $book]);
	}
	function contact()
	{
		echo "day la lien he";
	}
	function login()
	{
		include_once './views/login.php';
	}
	function postLogin()
	{
		echo $_POST['username'] . "-" . $_POST['password'];
	}
}
 ?>
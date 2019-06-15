<?php

namespace App\Http\Controllers\Dashboard;

use App\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class booksController extends Controller
{
    public function index(){

 
        // $enre= Re viewer::where('type','eng lish')->get();

        // $bnre= Re viewer::where('type','ban gla')->get();
        $book=Book::with( 'review')->latest()->paginate(10);
        return view('back.books.addbooks',compact('book'));
    }
    public function store(Request $request)
    {

        if($request->hasFile('image')) {
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            $request['photo']=$filename  ;
            $file->move('book_photo/', $filename);
        }

        $cate = $request->input('cate');
        $cate = implode(',', $news);

        $input = $request->except('cate');
        //Assign the "mutated" news value to $input
        $input['cate'] = $cate;


        Book::create($request->except('_token'));
        return redirect()->back()->with('message','Book Added Successfully.');

       
    }
    public function ajax_filter(){
        if (isset($_POST["action"])) {
                $query = "
  SELECT * FROM product WHERE product_status = '1'
 ";
                if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
                        $query .= "
   AND product_price BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
  ";
                    }
                if (isset($_POST["brand"])) {
                        $brand_filter = implode("','", $_POST["brand"]);
                        $query .= "
   AND product_brand IN('" . $brand_filter . "')
  ";
                    }
                if (isset($_POST["ram"])) {
                        $ram_filter = implode("','", $_POST["ram"]);
                        $query .= "
   AND product_ram IN('" . $ram_filter . "')
  ";
                    }
                if (isset($_POST["storage"])) {
                        $storage_filter = implode("','", $_POST["storage"]);
                        $query .= "
   AND product_storage IN('" . $storage_filter . "')
  ";
                    }

                $statement = $connect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                $total_row = $statement->rowCount();
                $output = '';
                if ($total_row > 0) {
                        foreach ($result as $row) {
                                $output .= '
   <div class="col-sm-4 col-lg-3 col-md-3">
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
     <img src="image/' . $row['product_image'] . '" alt="" class="img-responsive" >
     <p align="center"><strong><a href="#">' . $row['product_name'] . '</a></strong></p>
     <h4 style="text-align:center;" class="text-danger" >' . $row['product_price'] . '</h4>
     <p>Camera : ' . $row['product_camera'] . ' MP<br />
     Brand : ' . $row['product_brand'] . ' <br />
     RAM : ' . $row['product_ram'] . ' GB<br />
     Storage : ' . $row['product_storage'] . ' GB </p>
    </div>

   </div>
   ';
                            }
                    } else {
                        $output = '<h3>No Data Found</h3>';
                    }
                echo $output;
            }
    }
}

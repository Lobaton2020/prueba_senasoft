<?php
class MainController extends Controller
{

    private $model;
    public function __construct()
    {
        $this->authentication();
        $this->model = $this->model("user");
    }

    public function index()
    {
        $users = $this->model->all();
        foreach ($users as $user) {
            $user->deparment = $this->model("department")->id($user->idproductiondeparment)->name;
        };
        return view("main.index", ["registers" => $users]);
    }

    public function create()
    {
        $deparments = $this->model("department")->all();
        return view("main.create", ["deparments" => $deparments]);
    }

    public function store()
    {
        execute_post(function ($request) {
            $data = [
                null,
                2,
                $request->id,
                $request->demparment,
                $request->name,
                $request->lastname,
                $request->email,
                null,
                1,
                date("Y-m-d H:i:s"),
            ];
            if ($this->model("user")->save($data)) {
                return redirect("main")->with("success", "Empleado almacenado");
            } else {
                return redirect("main")->with("danger", "Error");
            }
        });
    }
}

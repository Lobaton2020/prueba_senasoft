<?php
class AuthController extends Controller
{

    private $model;
    public function __construct()
    {
        $this->model = $this->model("user");
    }

    public function index()
    {
        return view("auth.login", [], false);
    }

    public function login()
    {
        execute_post(function ($request) {
            if (!empty($request->email) && !empty($request->password)) {

                if ($this->model->login($request)) {
                    return redirect("main");
                } else {
                    return redirect("auth")->with("danger", "Error de auténticacion");
                }
            } else {
                return redirect("auth")->with("danger", "Error de auténticacion");
            }
        });
    }

    public function logout()
    {
        session_destroy();
        redirect("auth");
    }
}

<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

	
    public function index__(){
		$this->display();
    }

    /*
		读取最新的30条评论
	*/
    public function showRecentComment(){
		$comment = D("InfoComment");
		$comment_data = $comment->getRecentComment();

		$this->assign('comment', $comment_data);
    }

    public function index(){
		
		$this->showRecentComment();
		
		if (IS_POST){
			if (isLogin()) { //判断是否登录
				$data["school_id"] = I("school_id");
				$data["college_id"] = I("college_id"); 
				$data["teacher_id"] = I("teacher_id");
				$data["course_id"] = I("course_id");
				$data["user_id"] = session("user_id");
				$data["comment_content"] = trim(I("comment_content"));
		
				$comment = D("InfoComment");
				$add_result = $comment->addComment($data);

				if ($add_result){ //判断插入是否成功
					$this->success("创建成功");
				}
				else{ //插入失败，重定向到原界面
					$this->redirect('Index/index', array(), 2, $comment->getError());
				}
			}
			else{
				$this->error("请先登录", U("User/login"));
			}
		} else if (IS_AJAX) {  //Ajax
			if (I("action") == 'a') {
				$school = D("InfoSchool");
				$school_id = I("school_id"); //通过选择的学校返回学校的所有学院名称
				$all_college = $school->getCollege($school_id);
				$json = json_encode($all_college);
				$this->ajaxReturn($json);	
			}
			else if (I("action") == 'b'){
				$school_id = I("school_id");					
				$college_id = I("college_id");
				$teacher = D("InfoTeacher");
				$all_teacher = $teacher->getTeacher($school_id, $college_id);
				$json = json_encode($all_teacher);
				$this->ajaxReturn($json);	
			} else if (I("action") == 'c') {
				$school_id = I("school_id");
				$college_id = I("college_id");
				$teacher_id = I("teacher_id");
				$teacher = D("InfoTeacher");
				$all_course = $teacher->getCourse($school_id, $college_id, $teacher_id);
				$json = json_encode($all_course);
				$this->ajaxReturn($json);
			}
			$this->display();
		}
		else{
			$school = D("InfoSchool"); //连接学校信息表，以获取全部学校名称
			$all_school = $school->getSchool(); //在Model中的定义，得到所有学校的ID和名称
			$this->assign("school", $all_school); //传给view
			$this->display();
		}
	
		
	}
}









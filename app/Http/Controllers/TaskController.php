<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

use File;

class TaskController extends Controller
{
    
    public function listTasks() {
        $tasks = Task::paginate(5);

        return view('task.list', compact('tasks'));
    }

    public function insert(Request $request)
    {
        $task = new Task;

        $newImageName = null;
        if ($request->hasFile('file'))
        {
            $fileName = $request->file('file')->getClientOriginalName();
            $ext = strtolower(substr($fileName, -4));
            $newImageName = md5(time()) . $ext; 
            $file = $request->file('file');
            
            if ($file->isValid()) {
                $file->move('uploads', $newImageName);
            }
        }
 
        $task->title = $request->title;
        $task->description = $request->description;
        $task->priority = $request->priority;
        $task->file = $newImageName;

        $this->validate($request, $task->rules, $task->messages);
        $task->save();

        return redirect()->route('list');
    }

    public function showEdit($id)
    {
        $task = Task::find($id);
        
        return view('task.addOrUpdate', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $dataForm = $request->except('file');
        $task = Task::find($id);
        $this->validate($request, $task->rules, $task->messages);
        $update = $task->update($dataForm);
        if($update)
            return redirect()->route('list');
        else
            return redirect()->route('edit', $id)->with(['erros'=> 'Falha ao editar']);
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $fileName = "uploads/{$task->getAttributes()['file']}";
        File::delete($fileName);
        
        $delete = $task->delete();
        return redirect()->route('list');        
    }
}

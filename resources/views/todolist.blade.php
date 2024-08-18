@include('layout.header')
<link rel="stylesheet" href="assets/style/todolist.css">

<div class="move"></div>
<div class="header-container">
    <script>
        document.title = 'TODO LIST' 
    </script>
    <div class="todo-container">
        <h2  class="h1-heading">ToDo List </h2>
        <div class="todo-section mlt-auto">
            <div class="inputgroup">
                <input type="text" name="nam" class="tdinput" placeholder="Add Task" >
                <button class="savebutton">
                    <span>
                        <div class="span1"></div>
                        <div class="span2"></div>
                    </span>
                </button>
                <span class="error"></span>
            </div>
            <div class="todo-taslist">
                <div class="task">
                    <p class="task-heading">Edit project video</p>
                    <div class="additionalbtns">
                        <span class="edit cpr" title="edit">&#9919;</span>
                        <span class="delete cpr" title="delete">&#9917;</span>
                    </div>
                </div>
                <div class="task">
                    <p class="task-heading textstrike">Edit project video</p>
                    <div class="additionalbtns">
                        <span class="edit cpr" title="edit">&#9919;</span>
                        <span class="delete cpr" title="delete">&#9917;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')
<script>
   
    let savebutton =document.querySelector('.savebutton')
    let error =document.querySelector('.error')
    
    let todolist = [];
      let loopthrough = () => {
        let tlist =document.querySelector('.todo-taslist')
        let tds = ''
        console.log(todolist)
        if(todolist.length>0){
            tds = todolist.map((td,key)=>{
            return `<div class="task mytasks"  >
                    <p class="task-heading  cpr ${td.class}" attr_key=${key}>${td.text}</p>
                    <div class="additionalbtns">
                        ${
                            td.class != 'textstrike'
                                ? `<span class="edit cpr" title="edit" attr_key="${key}">&#9919;</span>`
                                : ''
                        } 
                        <span class="delete cpr" title="delete" attr_key=${key} >&#9917;</span>
                    </div>
                </div>`
            })
            document.querySelector('.tdinput').value=""

        }
        else{
            tds = `Please add tasks.`
        }
        
        tlist.innerHTML = tds 
        
        strikethrough()
        deletes()
        edit()

    }
    loopthrough()

    function sb(){
        savebutton.addEventListener('click',function(){
            let tdinput =document.querySelector('.tdinput')
            if(tdinput.value!= ''){
                 error.innerHTML = ''
                if(tdinput.getAttribute('attr_id') && tdinput.getAttribute('attr_id') !="" ){
                    //edit case
                   const gk =  tdinput.getAttribute('attr_id')
                    todolist[gk].text = tdinput.value
                    tdinput.removeAttribute('attr_id')
                }
                else{
                    //add case
                    const ar = {
                        text:tdinput.value,
                        class:""
                    }
                    todolist.push(ar)
                    tdinput.value = ''
                }
                

               loopthrough()
            }
            else{
                error.innerHTML = 'This field is required.'
            }
        })
    }
    sb()
    
  
    function strikethrough(){
        const tdinputs = document.querySelectorAll('.task-heading')
        tdinputs.forEach((tinp)=>{
            tinp.addEventListener('click',function(){
               
                const gk = this.getAttribute('attr_key');

                if(todolist[gk].class == ''){
                    todolist[gk].class = 'textstrike'
                }
                else{
                    todolist[gk].class = ''
                }
                loopthrough()
            })
        }) 
    }

    function deletes(){
        const tddeletes = document.querySelectorAll('.delete')
        Array.from(tddeletes).forEach((tinp)=>{
            tinp.addEventListener('click',function(){
                const gk = this.getAttribute('attr_key');
                console.log('gk'+ gk)
                const todolis = todolist.filter((value, index)=>{
                    console.log(value+'  ddd arguments' + index)
                    return index != gk
                });
                todolist =  todolis 
                console.log(todolis)
                console.log('gkdddddddddddd'+ gk)
                loopthrough()
            })
        }) 
    }

    function edit(){
        const tdedits = document.querySelectorAll('.edit')

        Array.from(tdedits).forEach((tinp)=>{
            tinp.addEventListener('click',function(){
             
                const gk = this.getAttribute('attr_key');
                //const todolis = todolist.map((value, index)=>{
                    const tds = todolist[gk].text
                        let tdinput =document.querySelector('.tdinput')
                        tdinput.value = tds
                        tdinput.setAttribute('attr_id',gk)
                     //   loopthrough()
                    //}
               // });
               
            })
        }) 
    }


</script>

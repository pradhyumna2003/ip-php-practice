function chk(){
    nm=document.getElementById('name').values
    empid=document.getElementById('empid').values
    if(nm=='' || nm==null){
        alert('Invalid name')
        return false;
    }
    if(length(empid)!=5 ||empid==null || empid==''){
        alert('Invalid EmpID!')
        return false;
    }
    return true;
}

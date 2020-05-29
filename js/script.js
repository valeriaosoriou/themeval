

const formSearch = document.querySelector('#searchform #s');
  if(formSearch){
  formSearch.className += ' form-control mt-5 mb-2'; //adding bootstrap classes
  const btnSearch = document.querySelector('#searchsubmit');
    btnSearch.className += '  btn btn-block btn-dark mb-5'; //adding bootstrap classes

}


const sidebar = document.querySelector(' .customwidget ul');
  if(sidebar){
  sidebar.className += ' list-group';//adding bootstrap classes
  sidebar.querySelectorAll('li').forEach(item => {
    item.className += ' list-group-item';
});
}  
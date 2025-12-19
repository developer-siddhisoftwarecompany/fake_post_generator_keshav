document.querySelector('[name="name"]').addEventListener('input', e=>{
    document.getElementById('p-name').innerText = e.target.value;
  });
  
  document.querySelector('[name="username"]').addEventListener('input', e=>{
    document.getElementById('p-username').innerText = e.target.value;
  });
  
  document.querySelector('[name="content"]').addEventListener('input', e=>{
    document.getElementById('p-content').innerText = e.target.value;
  });
  
  document.querySelector('[name="likes"]').addEventListener('input', e=>{
    document.getElementById('p-likes').innerText = e.target.value;
  });
  
  document.querySelector('[name="comments"]').addEventListener('input', e=>{
    document.getElementById('p-comments').innerText = e.target.value;
  });
  
  document.querySelector('[name="date"]').addEventListener('change', e=>{
    document.getElementById('p-date').innerText = e.target.value;
  });
  document.querySelector('[name="profile_pic"]').addEventListener('change', e=>{
    const file = e.target.files[0];
    if(file){
      document.getElementById('p-avatar').src = URL.createObjectURL(file);
    }
  });
  
  
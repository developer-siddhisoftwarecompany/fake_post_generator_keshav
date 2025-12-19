document.querySelector('[name="username"]').addEventListener('input', e=>{
    document.getElementById('p-username').innerText = e.target.value;
    document.getElementById('p-user2').innerText = e.target.value;
  });
  
  document.querySelector('[name="caption"]').addEventListener('input', e=>{
    document.getElementById('p-caption').innerText = e.target.value;
  });
  
  document.querySelector('[name="likes"]').addEventListener('input', e=>{
    document.getElementById('p-likes').innerText = e.target.value;
  });
  
  document.querySelector('[name="time"]').addEventListener('input', e=>{
    document.getElementById('p-time').innerText = e.target.value;
  });
  document.querySelector('[name="profile_pic"]').addEventListener('change', e=>{
    const file = e.target.files[0];
    if(file){
      document.getElementById('p-avatar').src = URL.createObjectURL(file);
    }
  });
  document.querySelector('[name="post_image"]').addEventListener('change', e=>{
    const file = e.target.files[0];
    if(file){
      document.getElementById('p-post-img').src = URL.createObjectURL(file);
    }
  });
  
  
  
function send() {
  let data = {
    'postMSG': 'Y',
    'name': inputname.value,
    'msg': inputmsg.value
  }

  $.post('api/v1/Message/Add/index.php', data, (result) => {
    inputmsg.value = ''
  })
}

function get() {
  $.get('api/v1/Message', { 'getMSG': 'Y' }, (result) => {
    msglist.innerHTML = '<hr>\r\n' + result;
  })
}

//------------

$('#inputname').keydown((event) => {
  if (event.which == 13)
    send()
})

window.onload = () => {
  setInterval(() => {
    get()
  }, 400)
}
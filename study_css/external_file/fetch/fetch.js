var url = "http://sumikawa.kirksville.co.uk/external_file/fetch/fetch.json";


$('#btn').on('click', function() {
    fetch(url, { method: 'GET' })
        .then((res) => {
            console.log(res);
            return res.json();
        })
        .then((data) => {
            console.log(data);
            if (!$('.person_list').length) {
                for (var i in data) {
                    var ele = data[i];
                    var id = '<li class="id">id：' + ele.id + '</li>';
                    var name = '<li class="name">名前：' + ele.name + '</li>';
                    var type = '<li class="type">血液型：' + ele.type + '</li>';

                    var data_list = '<ul class="person_list">' + id + name + type + '</ul>';
                    $('#person').append(data_list);


                }
            }


        })
        .catch((err) => {
            console.log(err);
        });
});
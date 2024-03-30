var InsertAPIURL = base_url + '/user/updateProfileData.php';
      var headers = {
        Accept: 'application/json',
        'Content-Type': 'application/json',
      };

      await fetch(InsertAPIURL, {
        method: 'POST',
        headers: headers,
        body: JSON.stringify({
          user_id:userDetail[0].id,
          username:username,
          email:email,
          facebook:facebook,
          instagram:instagram,
          twitter:twitter,
          linkedIn:linkedIn,
        }),
      })
        .then(response => response.json())
        .then(response => {
          setloading(false);
         console.log(response); 
          if(response[0].error==true) {
            setSnackDetails({
              text: response[0].message,
              backgroundColor: COLORS.red,
            });
            onToggleSnackBar()
          }
          else {
            navigation.navigate('CreateCover',{
              userDetail:userDetail
            });
          }
        })
        .catch(error => {
          setloading(false);
          alert('this is error' + error);
        });
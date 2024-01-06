<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>JoeMama So...</title>

    <style>
        body{
            background-color: #494d5f;
            overflow-x:hidden;
            overflow-y:hidden;
            text-align: center;
            margin: 0px !important;
        }
        .top{
            height: 30vh;
            width: 100vw;
            display: flex;
            
        }
        .img-box{
            flex-grow: 1;
        }
        .img-box img{
            height: 100%;
            /* width: 100%; */
        }
        .joke{
            height: 30vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000; 
        }
        .bottom{
            height: 30vh;
            width: 100vw;
            display: flex;

        }
        h1{
            color:yellow;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1 class="text-warning">Insomnia made me do it guys!!! Was a very fun project to make</h1>
        <br>
        <h2 class="text-white">You can fool your friends by making a fake url enter any sentence to create a url so you can share with friends</h2>
            <input type="text" class="form-control" name="inputSentence" id="inputSentence" placeholder="example: how to be radiant in valorant">
            <br>
            <button class="btn btn-success btn-lg" onclick="generateSlug()">Make Url</button>
                <br>
            <p class="h3 text-danger" id="slugResult"></p>
        </div>

        <script>
           function generateSlug() {
      // Get the input element by id
      const inputElement = document.getElementById('inputSentence');

      // Get the content of the input element
      const sentence = inputElement.value.trim();

      // Check if the input is empty
      if (sentence === '') {
        alert('Please enter a sentence before generating a slug.');
        return;
      }

      // Create the slug
      const slug = createSlug(sentence);
      // Display the result
      const baseUrl = "{{ url('/') }}";
      const resultElement = document.getElementById('slugResult');
      resultElement.textContent = 'Recipe to Destruction: ' + baseUrl +'/' + slug;
    }

    function createSlug(sentence) {
      // Replace spaces with hyphens, convert to lowercase
      let slug = sentence.toLowerCase().replace(/\s+/g, '-');

      // Remove special characters
      slug = slug.replace(/[^\w-]/g, '');

      return slug;
    }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Medical NEWSCORPUS</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form method="post" action="insert.php">
                    <h2 class="text-center mb-4 text-uppercase text-primary">Insert Data</h2>
                    <label>Sort_Order</label>
                    <input type ="number" class="form-control"  name="srtorder" required>
                    <label>Link</label>
                    <input type="file" class="form-control" name="link" required>
                    <div class="mb-3">
                        <label>Heading</label>
                        <input type="text" placeholder="title" class="form-control" name="heading" required>
                    </div>
                    
                      <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <label class="form-label">Category</label>
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            style="height: 100px" name="categroy" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Detail</label>
                        <input type="text" class="form-control" name="detail" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <input type="text" class="form-control" name="content" required>
                    </div>
                    
                   <button type="submit" class="btn btn-primary mt-4 px-5 py-2" value="submit"  name="submit">Submit</button></a>
                </form>
            </div>
        </div>

    </div>
    
</body>
</html>
<html>
<head>
    <title>Blog Post List</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div
    class="container">
    <div
        class="header">
        <div
            class="right-side">
            ایجاد پست جدید
        </div>
        <div
            class="left-side">
            <a href="index.php">
                لیست پست ها
            </a>
        </div>
    </div>
    <div
        class="card">
        <div
            class="card-header">

        </div>
        <div
            class="card-body">
            <form
                method="post"
                action="store.php">
                <div
                    class="form-group">
                    <label
                        class="form-lable">
                        عنوان پست
                    </label>
                    <input
                        class="form-control"
                        type="text"
                        name="title">
                </div>
                <div
                    class="form-group">
                    <label
                        class="form-lable">
                        متن
                    </label>
                    <textarea
                            style="height: 300px"
                        name="text"
                        class="form-control"
                    ></textarea>
                </div>
                <div
                        style="text-align: center"
                    class="form-group">
                    <button
                    type="submit">
                        ذخیره
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
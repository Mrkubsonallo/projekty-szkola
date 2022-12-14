<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z25-27e</title>
    <style>
        body
            {
                background-color: #222;
                color: #dbdbdb;
                font-size: 50px;
                user-select: none;
            }
    </style>
</head>
<body>
    <?php
        $wartosc = 77;
        printf("Przy użyciu ciągu %%b = %b <br>", $wartosc);
        printf("Przy użyciu ciągu %%c = %c <br>", $wartosc);
        printf("Przy użyciu ciągu %%d = %d <br>", $wartosc);
        printf("Przy użyciu ciągu %%u = %u <br>", $wartosc);
        printf("Przy użyciu ciągu %%f = %f <br>", $wartosc);
        printf("Przy użyciu ciągu %%o = %o <br>", $wartosc);
        printf("Przy użyciu ciągu %%s = %s <br>", $wartosc);
        printf("Przy użyciu ciągu %%x = %x <br>", $wartosc);
        printf("Przy użyciu ciągu %%X = %X <br>", $wartosc);
    ?>
</body>
</html>
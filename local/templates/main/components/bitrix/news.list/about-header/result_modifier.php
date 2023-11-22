<?php

$dbList = CFile::GetByID(
    end($arResult["ITEMS"])["PROPERTIES"]["file_to_download"]["ID"]
);
$result = $dbList->Fetch();
end($arResult["ITEMS"])["PROPERTIES"]["file_to_download"]["SRC"] = $result["SRC"];

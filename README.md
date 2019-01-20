

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources

## 访问
```bash
http://localhost:8080/index.php?r=books
// 或
http://localhost:8080/index.php?r=books/index
```

## 待处理问题

[ ] 修改数据的时候，`create_time` 字段的时间也更新问题
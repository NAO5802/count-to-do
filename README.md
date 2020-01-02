# DB設計
## usersテーブル
|Column|Type|Options|
|------|----|-------|
|nickname|string|null: false|
|email|string|null: false, unique: true|
|email_verified_at|timestamp| |
|password|string|null: false|
### Association
- has_many :tasks

## tasksテーブル
|Column|Type|Options|
|------|----|-------|
|category|enum|null: false|
|memo|text| |
|finished|boolean|default: false|
|user_id|foreign| |

### Association
- belongs_to :user
# # UserGet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email address of the user | [optional]
**password** | **string** | Hash of the user&#39;s password; Example&#x3D;&#39;$bcrypt-sha256$v&#x3D;2,t&#x3D;2b,r&#x3D;12$fmsAdJbYAD1gGQIE5nfJq.$zLkQUEs2XZfTpAEpcix/1k5UTNPm0jO&#39; | [optional]
**comment** | **string** | A description for the user. This description is shown on the Users page | [optional]
**quota_bytes** | **int** | The maximum quota for the user’s email box in bytes | [optional]
**global_admin** | **bool** | Make the user a global administrator | [optional]
**enabled** | **bool** | Enable the user. When an user is disabled, the user is unable to login to the Admin GUI or webmail or access his email via IMAP/POP3 or send mail | [optional]
**enable_imap** | **bool** | Allow email retrieval via IMAP | [optional]
**enable_pop** | **bool** | Allow email retrieval via POP3 | [optional]
**allow_spoofing** | **bool** | Allow the user to spoof the sender (send email as anyone) | [optional]
**forward_enabled** | **bool** | Enable auto forwarding | [optional]
**forward_destination** | **string[]** |  | [optional]
**forward_keep** | **bool** | Keep a copy of the forwarded email in the inbox | [optional]
**reply_enabled** | **bool** | Enable automatic replies. This is also known as out of office (ooo) or out of facility (oof) replies | [optional]
**reply_subject** | **string** | Optional subject for the automatic reply | [optional]
**reply_body** | **string** | The body of the automatic reply email | [optional]
**reply_startdate** | **\DateTime** | Start date for automatic replies in YYYY-MM-DD format. | [optional]
**reply_enddate** | **\DateTime** | End date for automatic replies in YYYY-MM-DD format. | [optional]
**displayed_name** | **string** | The display name of the user within the Admin GUI | [optional]
**spam_enabled** | **bool** | Enable the spam filter | [optional]
**spam_mark_as_read** | **bool** | Enable marking spam mails as read | [optional]
**spam_threshold** | **int** | The user defined spam filter tolerance | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

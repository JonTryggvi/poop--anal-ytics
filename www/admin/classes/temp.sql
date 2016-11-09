SELECT test.id, test.User_id, shade.name, shade.id FROM test JOIN test_has_shade ON test.id = test_has_shade.test_id JOIN shade ON test_has_shade.shade_id = shade.id WHERE User_id =102


SELECT test.id, test.User_id, texture.id FROM test JOIN test_has_texture ON test.id = test_has_texture.test_id JOIN texture ON test_has_texture.texture_id = texture.id where texture.id =1 AND User_id != 210

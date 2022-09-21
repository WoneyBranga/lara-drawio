<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'a',
            'email' => 'a@a.com',
        ]);
        \App\Models\Topologia::create([
            "user_id" => 1,
            "observacao" => "Desenho 01 demo",
            "imagem" => "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKEAAAApCAYAAABdskkDAAAAAXNSR0IArs4c6QAAA2l0RVh0bXhmaWxlACUzQ214ZmlsZSUyMGhvc3QlM0QlMjJsb2NhbGhvc3QlMjIlMjBtb2RpZmllZCUzRCUyMjIwMjItMDktMjFUMjAlM0EzMSUzQTI4LjA0OFolMjIlMjBhZ2VudCUzRCUyMjUuMCUyMChXaW5kb3dzJTIwTlQlMjAxMC4wJTNCJTIwV2luNjQlM0IlMjB4NjQpJTIwQXBwbGVXZWJLaXQlMkY1MzcuMzYlMjAoS0hUTUwlMkMlMjBsaWtlJTIwR2Vja28pJTIwQ2hyb21lJTJGMTA1LjAuMC4wJTIwU2FmYXJpJTJGNTM3LjM2JTIyJTIwZXRhZyUzRCUyMlZVaFFCS1FmM1lPbnBtT3J4QnZQJTIyJTIwdmVyc2lvbiUzRCUyMjEzLjguMiUyMiUyMHR5cGUlM0QlMjJlbWJlZCUyMiUzRSUzQ2RpYWdyYW0lMjBpZCUzRCUyMlpvZkNHcWxJRUppcllDLU5hLVF3JTIyJTIwbmFtZSUzRCUyMlAlQzMlQTFnaW5hLTElMjIlM0VqWk5OYjRNd0RJWiUyRkRYY2dyR3V2JTJGVmgzbVRTSnc4NFJ1Q1Jhd0NpNEJmYnJsd3lud0twSnV5RDdlZTNFSHlFU2gzbzRXOW1xTnl6QlJHbGNEcEU0Um1tNmZjcmMxNE54QXRtT1FXVjFPYUZrQnJuJTJCQW9ZeDA2c3VvVnNGRXFJaDNhNWhnVTBEQmEyWXRCYjdkZGdGemZyV1ZsYndBUEpDbWtmNm9VdFMzRmI2UFBOWDBKVUtOeWViM2FUVU1nUnpKNTJTSmZZTEpFNlJPRmhFbXF4Nk9JRHhzd3R6bWZKZSUyRmxEdmhWbG82RDhKNlpSd2slMkJiS3ZSMmhnMGFoZ3pHZjF0RVlHbmZsdHQ1MEYwaGp3R0JsWlIySmZRdFcxMEJnZjJ2dnM3RHZsU2JJVzFuNEUzcjNNQnhUVkJ2bkpjNjg2QUhDcnIzZmZRSVZmbHF4RjdHaG9HMkR6M1VKNXolMkYyemNYZndCSU1DOFJ6T0FPNnV1em9RdnA1aGNtRzk2SVc2OHVZU1g0MTFUMTFIcXd6ZUxiQm5YZjRveTElMkJCSEg2QmclM0QlM0QlM0MlMkZkaWFncmFtJTNFJTNDJTJGbXhmaWxlJTNFXOG37gAABRFJREFUeF7tnb1KJEEQx9vkwE0124VLRgwFU43VNzBQMNEThQPN1UAfQOEiz1QDH8HcTQUzhQ3uYDcwMF3hoqMXainbqumvmsPbrol0trt6qurfv6qeBZ0ysle7qqpur9f7KmtWrU1qBObm5n5NSTrXarV+7OzsfLu4uPgiaVdtTWYEDg4O/lxdXf2UFGHbGNPv9/um3bY/6qUR4CMwGAxMp9OxAzpiIlQKquRiIgAUHA6H36VEqBSMyUDhYzEFjTEDEREqBQtXVaT7mIJ2qoQIlYKRSSh5uEtBEREqBUuWVLzvLgUlRKgUjM9DsTMoCmaLUClYrJ6SHKcomCtCpWBSKsqcxFEwS4RKwTLFlOo1R8EcESoFU7NR4Lw6CiaLUJKCb29v5vDw0FxeXn5Iz8LCgrm9vTXz8/P/XepeX1/NxsaGubu7M6enp+b4+LhxH87OzszJyclondXVVXNzc2NmZmbYdbvdrlleXm78+eoomCpCUQo+Pz+b9fV18/j4yAbr/v7eLC0tNZ5EyQWwX00/PxY89oHbxO7Gv76+Hm2YJi4fBZNEKElB+wCwG+3POFk4sCG7uokA5tgEv/4FzYGAEKdWqzWuLq7AMC3BvyY3iY+CKSIUpaB9AFsyNjc3DZUsTqB4HgSSKnkUIThBw3Nw9jA97Fr7+/vjcutuIPs7JHt3d9ccHR2Z7e3tUWmmxlL+hIqXIy5e//z83AyHw3fPC36GrpOyIUMoGC1CaQrixNpk2WBNT0+P/cUBhh1d10NiIdaVeSzEUHtY0LZ9sL0qV/qwzZWVFfPy8vKu3QhdnxMsXtelIPSArggfHh5G/R/E0f0cxz1FcNScEArGilCcgr7mnRIhBA/vYKr0wThOmG4yfPZcUUMJwwSFezFjcXmkNhq1OSHhXPx8m9ulehOHplAKRolQmoJuP0g1x64I19bWxiUFj8dBBSHg5HKnU5xEnz0sNjyWahnwPWosCH52dpY9QYf0lNQmtXFN2dxS9AM7oRSMEaE4BX39oNsnWXHZy5aUuguSzpVj3IRjsXA2XWK6PSWIE9+n7mF/YOzT09PYH/dwECJCrmf2ncxDbOeIMoaCwSJsgoK4eacOC5huVNK4ILnJpE6DIKwQEVp7i4uL49MmpipV9uxzwXtPXEqpsdCnUYeDugMb+M6JidsEMM/3eY4A7dwYCoaKsBEK+koGVf4g6CmvbDAdQBwgAp89rmxT92PGciTz9XR1IvT1e6G2U4UYS8EgETZFQa6fccswFgiXYHzS29vbM1tbW6PTKKYWJfoQe/bEzhGLKntcKaTu4/UxNTG9697hUTZ9BOV8ThWdOy+WgiEibISC7qGECwBFKPd9HszFJY0qwdQ4V/D4ObA9X4+XOrZufftZyNd9nK/ctyC+fjFHjCkU9IqwKQrifjC0t8Pj3F6Oeo1B9Xtc2fXZ496pUfdjxrplFfsY8y0GFqLv5bOPlDkiTKGgT4SNUTDHUZ37OSOQSsFaETZJwc8ZRn2qnAikUrBOhErBnIwUNjeHgqwIlYKFqSjT3RwKciJUCmYmpaTpuRQkRagULElC+b7mUpASoVIwPy/FWJCg4AcRKgWL0Y+IoxIUdEWoFBRJTRlGpCj4ToRKwTLEI+WlFAWxCJWCUtkpwI4kBcciVAoWoBxBFyUpCCJUCgomaNJNSVNwJEKl4KTLRtY/aQqORFhV1S/9vyOyiZpka1VV/e71evbPYQyk/PwLC/fijyzLs3YAAAAASUVORK5CYII="
        ]);
        \App\Models\Topologia::create([
            "user_id" => 1,
            "observacao" => "Desenho 02 demo",
            "imagem" => "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAS0AAAC1CAYAAAAKoal0AAAAAXNSR0IArs4c6QAABHd0RVh0bXhmaWxlACUzQ214ZmlsZSUyMGhvc3QlM0QlMjJsb2NhbGhvc3QlMjIlMjBtb2RpZmllZCUzRCUyMjIwMjItMDktMjFUMjAlM0EzNCUzQTA5LjE0M1olMjIlMjBhZ2VudCUzRCUyMjUuMCUyMChXaW5kb3dzJTIwTlQlMjAxMC4wJTNCJTIwV2luNjQlM0IlMjB4NjQpJTIwQXBwbGVXZWJLaXQlMkY1MzcuMzYlMjAoS0hUTUwlMkMlMjBsaWtlJTIwR2Vja28pJTIwQ2hyb21lJTJGMTA1LjAuMC4wJTIwU2FmYXJpJTJGNTM3LjM2JTIyJTIwZXRhZyUzRCUyMnQ2ZmtTVTNLcmc2SmJEUmttaFh1JTIyJTIwdmVyc2lvbiUzRCUyMjEzLjguMiUyMiUyMHR5cGUlM0QlMjJlbWJlZCUyMiUzRSUzQ2RpYWdyYW0lMjBpZCUzRCUyMlpvZkNHcWxJRUppcllDLU5hLVF3JTIyJTIwbmFtZSUzRCUyMlAlQzMlQTFnaW5hLTElMjIlM0V6WlpOYjZRd0RJWiUyRkRkZHFobzkyNWpqUTd1NWhWMXBwRHRzZW84R0Z0SUJSTUFQMDEyOEFodzlsdTZwVWRkb0xpbDg3VG1JJTJGaVhDOEtHJTJCJTJGSzFHbXZ6Q0d6SEUzY2V0NHQ0N3I3Z0pmZjN1aEd3ViUyRnowS2laRHhLMjFrNHloZGdjY05xTFdPb1ZvR0VtSkVzMSUyQklKaXdKT3ROS0VVdGlzd3g0eFc2OWFpZ1FzNFhnU21hMyUyQmtUR2xmQ3ozWnRaJTJGZ0V4U3MlMkZMMmVqOTZjbUdDJTJCU1JWS21Kc0ZwSjM1M2lSUXFSeGxMY1JaSDN0VEYzR2VkOWU4VTRiVTFEUVd5WmM4emFvTTJkVFdCY3g5TzZONDRXb0tNVUVDNUg5UkN5MXVOWGlFeEIxM0JWUkUyb3BwVHhqTDdTUzd2dnBWOTV1eCUyRmJEd25mYmN1N0I2QmJHYjFBeUJ3Smx0SUpVZDc4MEhvYThnVEhuVklObGNsV2s4SG5xVEI4OW5oSmlxNjF6blZpcXNGWW5qbklaTGFFUzRLaGc2cEZtRzFEdlZuVTZSRUVt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"
        ]);
    }
}

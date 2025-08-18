## Subresource Integrity

If you are loading Highlight.js via CDN you may wish to use [Subresource Integrity](https://developer.mozilla.org/en-US/docs/Web/Security/Subresource_Integrity) to guarantee that you are using a legimitate build of the library.

To do this you simply need to add the `integrity` attribute for each JavaScript file you download via CDN. These digests are used by the browser to confirm the files downloaded have not been modified.

```html
<script
  src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.10.0/highlight.min.js"
  integrity="sha384-pGqTJHE/m20W4oDrfxTVzOutpMhjK3uP/0lReY0Jq/KInpuJSXUnk4WAYbciCLqT"></script>
<!-- including any other grammars you might need to load -->
<script
  src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.10.0/languages/go.min.js"
  integrity="sha384-Mtb4EH3R9NMDME1sPQALOYR8KGqwrXAtmc6XGxDd0XaXB23irPKsuET0JjZt5utI"></script>
```

The full list of digests for every file can be found below.

### Digests

```
sha384-lU6If27eTyL2Yr+WS3ErF0/raeRKUheLuCM44IUaUshDCTvTeQijobPXY4wgkDGb /es/languages/csharp.js
sha384-k4z6XdU7qI35NxUF8SGumv5kMerrVg/xoat0iSaWnu/dHKoNZKdxZN3gI2WYgMfe /es/languages/csharp.min.js
sha384-+9dzNYaLHp3OPspFCOJGrEwfiOV3yqeD/atUDYVt9zKUJ8IW2QxffCT2LfmGfwfW /es/languages/css.js
sha384-G44u1/pUATC8754FIKYqkCxCl9AQYnspnFxzuR3RB1YVnTvqOEofqvZNQMUWcY/1 /es/languages/css.min.js
sha384-U0cmcZmeG0JVcA3HKR6r7Sio0x8FtcXR7eviBCcgniMwCc+DMiV6IQPm7bFn6BPh /es/languages/go.js
sha384-5Mzx2XTmXU2XQ0AiQg/4HA9SbBDrPySZgpsOfSfflGdzC4bIpCjWSxIP62fOIFkO /es/languages/go.min.js
sha384-ZCfS+s/zxY7O2bm2KoVJo1wUrLEpJDHZAi/LJAdJF5XjnfSWICkg6wHd2SEJGpyR /es/languages/java.js
sha384-716dHwZ7zbZcnEwTe7DLxlm5tH3Iyl8vSW5a2kYPgusEdp5k3A3jeZt0Ck+CjYE0 /es/languages/java.min.js
sha384-oQpcUGMBf+VDTHOLQ1uhPp1FgNBo0OZc9gbXGuVFwAogHlkh/Iw6cvKKgcgCQkmV /es/languages/javascript.js
sha384-3T8DJ91yCa1//uY9h8Bo4QLrgEtbz4ILN2x9kSM4QWX9/1kKu6UXC3RAbVQV85UQ /es/languages/javascript.min.js
sha384-TWMQ/3YwBMm0b/GhDxqPJHcRh82R+0fiBA85TmnqHGfhccDJMkueh/BQqfOxlgb/ /es/languages/perl.js
sha384-2CHs1KY5b+PYxl5fEs1H9IwHwE8eglxOgjVwD9dlhDWZfWKj/w3uHtDDH+1P8nYO /es/languages/perl.min.js
sha384-BxojDi6ePBYN3unEc6aUEpUtUyx0Eq0i/UZPISuI2YQy6eAD5HzD0dtBC53uZ6R1 /es/languages/php.js
sha384-C28kAnknmyKQUME+2sa0tyQkFMN1S/aUSB1gQ+PKUf0+ewgxNh8CwAmd+C0UUaZ7 /es/languages/php.min.js
sha384-e+d8RFZbtc5Pmt3xfX9uuElm63v5qOj7T5hAkkFbnYc1wEk7wCLlzOsm66MCf5Uk /es/languages/python.js
sha384-CPHh+9FxkWF3OtMZdTj5oQN1Qti0p4/5XBABz/JdgssOKHmfAOFz6Gu4tsG6MQiH /es/languages/python.min.js
sha384-Blm/RpTi15HpdenfAja/zwDDJ6bBmIoAsFgHcNpw4u+DqKFZEpB67DIa2A1NXtZf /es/languages/ruby.js
sha384-INdPgGNAH51T3uWXoaYVa0ag70hxlbvjTlhyLicF3SuuG0BVuycs/GrFGi7gt/8a /es/languages/ruby.min.js
sha384-BcyijKQAe0oJGoEBf0y/+dTJjKiy4bIAVdjreJw+MiOkPgCEjM/2FY2+W7K6tcEZ /es/languages/typescript.js
sha384-Mfjt0R07QBpLXhGWeCetLw7s2mTQSoXmcyYnfsSNq4V4YG3FwayBjxod9MxjSB1x /es/languages/typescript.min.js
sha384-Tdx2DY9ZTHx3KhVXYqOVKx3q1zOboDGlTTv8sgMlER8y4WETtqL+C4VQ7B4A0OGq /es/languages/xml.js
sha384-n9ZezaAVj8pK1BIFZQxmC1BM9yGuBNRgvsOxHMHPCXzqYd1gSYIu9KjgGEm8K57w /es/languages/xml.min.js
sha384-73x+NDGuWTdFik2BOd5uwmBcikSmR+Qx5AVbJLifM/M0hBbwKToQ45xBWxKYkpgd /languages/csharp.js
sha384-6NsOlZtv7W2iSoDU+Yi+hENfl3MuiECvnl7emdRUvpIpDbLvoCjpAU1fjE6HxIQp /languages/csharp.min.js
sha384-h6xPJgkyvp13tIs697wZHjCH20tW1aJOrvnAKiZZiATSWZp0lyLB4bAdsEhWUSze /languages/css.js
sha384-+MO3D3y/aZzZq7QMAAA5KiuAcqBZivJHFmVUXfwdBoLxEXeGTeQGsNMll4fpnegg /languages/css.min.js
sha384-B9Y0sXbhPrwdlpzfeFn4NkyJrhYEUFUCTMrEVRu+d2/3aJ/4ZOjFPJRZFnJdaQJm /languages/go.js
sha384-Mtb4EH3R9NMDME1sPQALOYR8KGqwrXAtmc6XGxDd0XaXB23irPKsuET0JjZt5utI /languages/go.min.js
sha384-cZ2d3Mo/jmTF9r2kHWcHmA8hehxX8N44UN6LSkEhaCRe6t8e9ntd5JEuafywm0aw /languages/java.js
sha384-8mc5ynnm3AlnXn8P3ccSqVAaZIDoijPM08/Hp4DABy6GMy7EHCQFwiIUoGAaGJiO /languages/java.min.js
sha384-p/utwvqrRVOLlz0BjJ0BCGCb2liTDipfz47/QmGXz9hoPIjCKYEgmYUC30VmGgZy /languages/javascript.js
sha384-L/XmDiyusXomLRGcRmcBpPlboRFjpQNV747OJvg+sEOpgGYvUsNwcC4JLNQ2dI6O /languages/javascript.min.js
sha384-zERbDkBWHytM3CXyujBAd5bpdMZDupVU6hl9bDiSg4w9I8bV6KhGSKxsCdcPWWU0 /languages/perl.js
sha384-HBc3JQgC+i/l43bOuIE9xtQz9ZFXZDEjPCyiFD7O5Wauvl79zHEQmV4uDStGEQLu /languages/perl.min.js
sha384-swGDgtGOmzrsbFAaQRjzvGs0hhe0N86mfHIuisr3W9AT0hiheGyRORSGrbMDGOw5 /languages/php.js
sha384-Xd0AQIkWCEjBL8BNMtDMGVqFXkf445J6PNUJdXbh334ckjeSa90wtSUjXySuz+rt /languages/php.min.js
sha384-WNah6F2QDUbmrNCi0fSEyKJbSb01S1ijnoiwbDnegW7dm2Cz/H1CiH1HhWlUvj01 /languages/python.js
sha384-YDj7s2Wf0QEwarV3OB8lvoNJJCH032vOLMDo2HDrYiEpQ+QmKN+e++x3hElX5S+w /languages/python.min.js
sha384-nHCt5/kJd7LUp6BbVLNuUH0zziFVRS2Qqj9whqRpVpgzybI61OZlKQRPv4evHrJO /languages/ruby.js
sha384-LOFdRHZ5u+oZg5Wh8DpkiJQR/w8egcUhJJoo95XVQ846DEwuRxGUujx+tQKyqXme /languages/ruby.min.js
sha384-4q0Mj1AHSvVdgi6nXDGdkiHZQcme/PcCE+MvwCvnAIZSjhJfk3UpjJU2nn2eImWz /languages/typescript.js
sha384-rfwxAwuWzb2XdSU7HN3IhrSyCq96Nj4p1ZYPCNAGbqtnPsaWl8d5eSypxPbW6alT /languages/typescript.min.js
sha384-QAL2h4IMgQaJUJjUy0dSWdAut7o/A272ai8qOsJ8SSm9KMxkdLgH7oGfLGft/EJ0 /languages/xml.js
sha384-CN3No+n1UZXCFYyl+ge5yAPGTNGuH23BdIsFJxntDmEYL94AmoZlNBHGSdjVSjKG /languages/xml.min.js
sha384-nyZSmM4Xc0zNXlU1Jcj/EDg5zZi3qd5wpzLvF41VB76KAy2k0N/VjFKnzT41PZo9 /highlight.js
sha384-kvn6fJgamnFIYRA3UGVPCfscQN0/OZyCg/OG2j/s4M8ez26NwDbvNOCxh/kPrBFO /highlight.min.js
```


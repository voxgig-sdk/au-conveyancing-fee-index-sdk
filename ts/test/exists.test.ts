
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { AuConveyancingFeeIndexSDK } from '..'


describe('exists', async () => {

  test('test-mode', () => {
    const testsdk = AuConveyancingFeeIndexSDK.test()
    equal(testsdk instanceof AuConveyancingFeeIndexSDK, true,
      'AuConveyancingFeeIndexSDK.test() must return a client synchronously')
  })

})

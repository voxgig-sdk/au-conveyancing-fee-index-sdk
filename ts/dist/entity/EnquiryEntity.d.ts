import { AuConveyancingFeeIndexEntityBase } from '../AuConveyancingFeeIndexEntityBase';
import type { AuConveyancingFeeIndexSDK } from '../AuConveyancingFeeIndexSDK';
import type { Control } from '../types';
import type { Enquiry, EnquiryCreateData } from '../AuConveyancingFeeIndexTypes';
declare class EnquiryEntity extends AuConveyancingFeeIndexEntityBase<Enquiry> {
    constructor(client: AuConveyancingFeeIndexSDK, entopts: any);
    make(this: EnquiryEntity): EnquiryEntity;
    create(this: any, reqdata?: EnquiryCreateData, ctrl?: Control): Promise<EnquiryEntity>;
}
export { EnquiryEntity };
